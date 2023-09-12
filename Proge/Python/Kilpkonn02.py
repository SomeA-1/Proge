import turtle

aken = turtle.Screen()
aken.setup(300,300)

k = turtle.Turtle()
for x in range(5):
    k.forward(100)
    k.right(144)
    
k.left(180)
k.penup()
k.forward(10)
k.pendown()

for x in range(3):
    k.color('red')
    k.forward(100)
    k.right(120)
    
turtle.exitonclick()
