extends Node

"""
# Declare member variables here. Examples:
# var a = 2
# var b = "text"
var players = ["Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett","Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin", "Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins", "Galer","Matevosian","DeBlase","Cummin","Izzett","Ebi","Clohisey", "Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes"]

var player = {"posx": 6, "posy": 9, "health": 100000, "items": ["hallucinations", "gun"], "gold": 1000}

# Called when the node enters the scene tree for the first time.
func _ready():
	print("Mängijaid on ", players.size())
	print("Esimene mängija on ", players[0])
	players.append("Arko")
	players.sort()
#	print(players)
	players.remove(31)
#	print(players)
	var suurim = players.max()
	print("Kõige pikem nimi on ", suurim)
	print(players)
	player.gold += 5*player.gold
	print("Sul on ", player.gold, " kulda")
	


# Called every frame. 'delta' is the elapsed time since the previous frame.
#func _process(delta):
#	pass
"""
