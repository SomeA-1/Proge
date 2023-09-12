#GrPy4
#Arko Avarsalu
#17.01

from tkinter import *

#akna seaded
aken = Tk()
aken.title('Botswana')
#aken.iconbitmap('favicon.ico')

#lõuendi loomine
louend = Canvas(aken, width=500, height=500)
louend.pack()

#kujundite loomine

louend.create_rectangle(20, 20, 220, 80, fill='#00ffff', width=0)
louend.create_rectangle(20, 85, 220, 110, fill='#000000', width=0)
louend.create_rectangle(20, 115, 220, 175, fill='#00ffff', width=0)


aken.mainloop()