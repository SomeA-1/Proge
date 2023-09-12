#GrPy 3
#Arko Avarsalu
#1.11.23

from tkinter import *
aken = Tk()
aken.title("Käibemaksu kalkulaator")
aken.geometry("350x150")
aken.resizable(0,0)
kmeur = 0
def maksud(h, kmm):
    fin = h+(h*kmm)
    print(fin)
    
tekst = Label(aken, text="Hind käibemaksuta:")
tekst.grid(row=0, column= 0, sticky=W)

sisestus = Entry(aken)
sisestus.grid(row=0,column=1, columnspan=4,padx=2,pady=2)

#random asjad
var = IntVar()
math = 0

#radiolabel
radiolabel = Label(aken, text='Kaibemaksumäär: ',pady=4)
radiolabel.grid(row=1,column=0)

#radiobutton
radio1 = Radiobutton(aken, text='9%',variable=var,value=1)
radio2 = Radiobutton(aken, text='20%',variable=var,value=2)
radio1.grid(row=1,column=2)
radio2.grid(row=2,column=2)

#vahe 
vahe = Label(aken, text='---------------------------------------------')
vahe.grid(row=3,column=0, columnspan=4)

    
#kaibemaksuta ja -ga hind ja label 
kaibemakslabel = Label(aken, text='käibemaksuga hind = ')
kaibemakslabel.grid(row=4,column=0)

kmga = Label(aken, text='')
kmga.grid(row=4,column=1)

kaibemaksutalabel = Label(aken,text='käibemaksuta hind = ')
kaibemaksutalabel.grid(row=5,column=0)

kmta = Label(aken, text='')
kmta.grid(row=5,column=1)

#funktsioonid
def arvutus():
    arv = float(sisestus.get())
    radio = var.get()
    if radio == 0:
        math = 0
    elif radio == 1:
        math = 0.09*arv+arv
        math = round(math,2)
    elif radio == 2:
        math = 0.2*arv+arv
        math = round(math,2)
    kmta.config(text=f'{arv}€')
    kmga.config(text=f'{math}€')
    math = 0

#button käivitab arvutus funktsiooni
enter = Button(aken, text='arvuta',command=arvutus, width=10)
enter.grid(row=5,column=3)

aken.mainloop()