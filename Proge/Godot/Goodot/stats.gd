extends Node

"""
var punkt = [7,28,64,51,81,40,21,73,34,98,39,17,33,85,35,44]
var total = 0
var average = 0
var punktid = ""
# Called when the node enters the scene tree for the first time.

func _ready():
	for i in punkt:
		total += i
	average = total/punkt.size() 
	print("Keskmine punktisumma on ", average)
	
	for j in punkt:
		punktid += str(j)
		punktid += ", "
		
	print(punktid, "kokku on ", total)
	
	
	for l in punkt:
		if l > 89:
			print(l, " - 5")
		elif l > 74:
			print(l, " - 4")
		elif l > 49:
			print(l, " - 3")
		else:
			print(l, " - 2")
# Called every frame. 'delta' is the elapsed time since the previous frame.
#func _process(delta):
#	pass
"""
