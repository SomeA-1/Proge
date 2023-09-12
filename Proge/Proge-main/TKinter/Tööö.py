#GrPy 2.3
#Arko Avarsalu
#17.01.23
import random
from tkinter import *

#var=tk.StringVar()
lits = []
rand = ""
aken = Tk()
aken.title("Täringumäng")
#aken.iconbitmap("maeitea.ico")
aken.geometry("400x200")

entry = Entry(aken, font=('Comic Sans MS bold italic', 25))
entry.grid(row=0, column=1)
aken.resizable(0,0)

tarinud = Label(aken, text=rand)
tarinud.grid(row=2, column=1)

def taring():
    lits.clear()
    mitu = int(entry.get())
    for i in range(mitu):
        rand = random.randint(1,6)
        lits.append(rand)
    tarinud.config(text=lits, font=('Comic Sans MS bold italic', 20))
submit_button = Button(aken, text="Submiteeri", command=taring)
submit_button.grid(row=1, column=1)

aken.mainloop()