extends Node
""""

# Declare member variables here. Examples:
var p1elu = 100
var p2elu = 100
var rng = RandomNumberGenerator.new()
var rn2 = RandomNumberGenerator.new()


# Called when the node enters the scene tree for the first time.
func _ready():
	while p1elu > 0 && p2elu > 0:
		rng.randomize()
		var p1hit = (rng.randi_range(8, 15))
		
		rn2.randomize()
		var p2hit = (rn2.randi_range(5, 20))

		p1elu -= p2hit
		p2elu -= p1hit
		
		print("P1 Hit: ", p1hit,", P2 elud alles: ", p2elu)
		print("P2 Hit: ", p2hit,", P1 elud alles: ", p1elu)
		
	if p1elu < 1:
		print("P2 võitis")
	elif p2elu < 1:
		print("P1 võitis")
	print("Mäng on läbi")

# Called every frame. 'delta' is the elapsed time since the previous frame.
#func _process(delta):
#	pass
"""
