import ttkbootstrap as ttk
from ttkbootstrap.tableview import Tableview
from ttkbootstrap.constants import *
import sqlite3

my_w = ttk.Window()
my_w.geometry("1200x400")
colors = my_w.style.colors
l1 = [
    {"text": "id", "stretch": False},
    {"text":"first_name","stretch":True},
    {"text":'last_name',"stretch":True},
    {"text":'email',"stretch":True},
    {"text":'car_make',"stretch":True},
    {"text":'car_model',"stretch":True},
    {"text":'car_year',"stretch":True},
    {"text":'car_price',"stretch":True}
]
r_set = []
db = sqlite3.connect('epood.db')
qry = db.execute('SELECT * FROM user')
data = qry.fetchall()
for row in data:
    r_set.append(row)

dv = ttk.tableview.Tableview(
    master=my_w,
    paginated=True,
    coldata=l1,
    rowdata=r_set,
    searchable=True,
    bootstyle=SUCCESS,
    pagesize=10,
    height=10,
    stripecolor=(colors.light, None),
)
dv.grid(row=0, column=0, padx=10, pady=5)
dv.autofit_columns()

entry_frame = ttk.Frame(my_w)
entry_frame.grid(row=0, column=1, padx=10, pady=5)

entry_labels = ['first_name:', 'last_name:', 'email:', 'car_make:', 'car_model:', 'car_year:', 'car_price:']
entry_fields = []

for i, label in enumerate(entry_labels):
    ttk.Label(entry_frame, text=label).grid(row=i, column=0, padx=5, pady=5)
    entry_field = ttk.Entry(entry_frame)
    entry_field.grid(row=i, column=1, padx=5, pady=5)
    entry_fields.append(entry_field)

def add_to_database():
    values = [entry_field.get() for entry_field in entry_fields]
    db.execute('INSERT INTO user (first_name, last_name, email, car_make, car_model, car_year, car_price) VALUES (?, ?, ?, ?, ?, ?, ?)', values)
    db.commit()
    refresh_table()

add_button = ttk.Button(entry_frame, text='Lisa', command=add_to_database)
add_button.grid(row=len(entry_labels), column=0, columnspan=2, padx=5, pady=5)

def delete_from_database():
    id_to_delete = delete_entry.get()
    if "," in id_to_delete:
        ids = id_to_delete.split(",")
        db.execute('DELETE FROM user WHERE id > ? AND id < ?', (int(ids[0])-1, int(ids[1])+1))
    else:
        db.execute('DELETE FROM user WHERE id = ?', (id_to_delete,))
    db.commit()
    refresh_table()

delete_frame = ttk.Frame(my_w)
delete_frame.grid(row=0, column=2, padx=10, pady=5)

delete_label = ttk.Label(delete_frame, text='ID:')
delete_label.grid(row=0, column=0, padx=5, pady=5)

delete_entry = ttk.Entry(delete_frame)
delete_entry.grid(row=0, column=1, padx=5, pady=5)

delete_button = ttk.Button(delete_frame, text='Kustuta', command=delete_from_database)
delete_button.grid(row=1, column=0, columnspan=2, padx=5, pady=5)

def refresh_table():
    global dv
    qry = db.execute('SELECT * FROM user')
    data = qry.fetchall()
    dv.purge_table_data()
    r_set.clear()
    for row in data:
        r_set.append(row)
    dv = ttk.tableview.Tableview(
        master=my_w,
        paginated=True,
        coldata=l1,
        rowdata=r_set,
        searchable=True,
        bootstyle=SUCCESS,
        pagesize=10,
        height=10,
        stripecolor=(colors.light, None),
    )
    dv.grid(row=0, column=0, padx=10, pady=5)
    dv.autofit_columns()

my_w.mainloop()