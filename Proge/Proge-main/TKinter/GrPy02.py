#GRPY 2
#Arko Avarsalu  
#1.10.23

from tkinter import *

aken = Tk()
aken.title("Loll asi")
#aken.iconbitmap("maeitea.ico")
aken.geometry("200x200")
tiitle = Label(aken, text="Siia kunagi vastus!", font="Tahoma 12", padx=10)
tiitle.grid(row=0, column=0, columnspan=4)

#Rida1
n1 = Button(aken, text="7", width=4)
n1.grid(row=1, column= 1, padx=2, pady=2)

n2 = Button(aken, text="8", width=4)
n2.grid(row=1, column= 2, padx=2, pady=2)

n3 = Button(aken, text="9", width=4)
n3.grid(row=1, column= 3, padx=2, pady=2)

n4 = Button(aken, text="/", width=4)
n4.grid(row=1, column= 4, padx=2, pady=2)

#Rida2
n5 = Button(aken, text="4", width=4)
n5.grid(row=2, column= 1, padx=2, pady=2)

n6 = Button(aken, text="5", width=4)
n6.grid(row=2, column= 2, padx=2, pady=2)

n7 = Button(aken, text="6", width=4)
n7.grid(row=2, column= 3, padx=2, pady=2)

n8 = Button(aken, text="*", width=4)
n8.grid(row=2, column= 4, padx=2, pady=2)

#Rida3
n9 = Button(aken, text="1", width=4)
n9.grid(row=3, column= 1, padx=2, pady=2)

n10 = Button(aken, text="2", width=4)
n10.grid(row=3, column= 2, padx=2, pady=2)

n11 = Button(aken, text="3", width=4)
n11.grid(row=3, column= 3, padx=2, pady=2)

n12 = Button(aken, text="-", width=4)
n12.grid(row=3, column= 4, padx=2, pady=2)
 
#Rida4
n13 = Button(aken, text="0", width=4)
n13.grid(row=4, column=1, padx=2, pady=2)

n14 = Button(aken, text=",", width=4)
n14.grid(row=4, column=2, padx=2, pady=2)

n15 = Button(aken, text="=", width=4)
n15.grid(row=4, column=3, padx=2, pady=2)

n16 = Button(aken, text="+", width=4)
n16.grid(row=4, column=4, padx=2, pady=2)


aken.mainloop()