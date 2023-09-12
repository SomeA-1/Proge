#GrPy01
#Arko Avarsalu
#1.10.23

cu = "Nimi: Arko Avarsalu \n Rühm: A-1 \n 2023" 
from tkinter import *
aken = Tk()
aken.minsize(700,300)
aken.maxsize(10,10)

#aken.iconbitmap("Icon.ico")
aken.title("nimi")
aken.configure(background="cyan")
text = Label(aken, text=cu, font=('Comic Sans MS bold italic', 38),  wraplength=6000, justify=CENTER, fg="hotpink", padx=100, pady=100, bg= "cyan")
text.pack()


aken.mainloop()
