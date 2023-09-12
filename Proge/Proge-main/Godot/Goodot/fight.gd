extends Node


var vaenlaseelud = 100
var clipsize = 5
var score = 0
var hit = 0
var rng = RandomNumberGenerator.new()
var totalshots = 0
var accuracy = 0
var attempt = 0

#var iusedtherngtorngtherng = RandomNumberGenerator.new()
# Called when the node enters the scene tree for the first time.
func _ready():
	print("----------------------")
	print("---sHOOTYT BADS GUY---")
	print("----------------------")
	rng.randomize()
	
	
	$"bg/miss".text = ""


# Called every frame. 'delta' is the elapsed time since the previous frame.
func _process(delta):
	$"bg/velud".text = "Vaenlase elud: %s" % vaenlaseelud
	$"bg/ammo".text = "Ammo: %s" % clipsize
	$"bg/Go".text = ""
	
	if clipsize > 0:
		$"bg/help".text = "Vajutage tühikut et vaenlast lasta"
		if Input.is_action_just_pressed("shoot"):
			attempt += 1
			print(attempt, ". lask")
			rng.randomize()
		
			var shot = randi()%100
			if shot < 75:
				accuracy = true
			else:
				accuracy = false
			
			clipsize = clipsize - 1
			print("Ammo: ", clipsize)
			if accuracy == true:
				hit += 1
				$"bg/miss".text = ""
				vaenlaseelud -= rng.randi_range(8, 12)
			else:
				$"bg/miss".text = "Lasid Mööda!"
				print("Lol ei saanud pihta")
			print(vaenlaseelud)
			totalshots += 1
			print("\n")
	if clipsize == 0:
		$"bg/help".text = "Vajutage 'R' klahvi et salve täita"
		print("Peate salve uuesti täitma, vajutage R tähte")
	
	if Input.is_action_just_pressed("reload"):
		print("Salv Täidetud")
		clipsize = 5
		
	if vaenlaseelud < 1:
		$"bg/ammo".text = "Ammo: %s" % clipsize
		$"bg/Go".text = "Mäng Läbi!"
		$"bg/velud".text = "Vaenlase elud: %s" % vaenlaseelud
		get_tree().paused = true
		print("Mäng läbi")
		print("Lasid ", totalshots, " lasku, millest pihta läks ", hit, " kuuli. (Täpsus:", hit*100/totalshots, "%)" )		

