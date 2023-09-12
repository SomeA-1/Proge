import turtle

aken = turtle.Screen()
aken.setup(1000,1000)

k1 = turtle.Turtle()


for x in range (5):
    
    for x in range (4):
        k1.forward(50)
        k1.left(90)
    
    k1.forward(12)
    k1.color('red')
    k1.left(90)
    k1.forward(25)

    for x in range (2):
        k1.right(90)
        k1.forward(25)
    
    k1.color('black')
    k1.penup

    k1.left(90)
    k1.forward(13)
    k1.left(90)
    k1.forward(50)

    k1.color('green')
    k1.left(30)
    k1.forward(50)
    k1.left(120)
    k1.forward(50)

    
    k1.color('black')
    k1.penup()
    k1.left(30)
    k1.forward(50)
    k1.left(90)
    k1.forward(100)
    k1.pendown()
    
k2 = turtle.Turtle()

k2.penup()
k2.right(90)
k2.forward(100)
k2.pendown()
k2.left(90)

for x in range (5):
    
    for x in range (4):
        k2.forward(50)
        k2.left(90)
    
    k2.forward(12)
    k2.color('blue')
    k2.left(90)
    k2.forward(25)

    for x in range (2):
        k2.right(90)
        k2.forward(25)
    
    k2.color('black')
    

    k2.left(90)
    k2.forward(13)
    k2.left(90)
    k2.forward(50)
    
    k2.color('green')
    k2.left(30)
    k2.forward(50)
    k2.left(120)
    k2.forward(50)
    
    k2.color('black')
    k2.penup()
    k2.left(30)
    k2.forward(50)
    k2.left(90)
    k2.forward(100)
    k2.pendown()
    


turtle.exitonclick()