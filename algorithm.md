

# Teraffic jam controlling

# Actors:
	* Traffic Police
	* Viacles
	* Roads
# Traffic Police
	* Standing a signal in a road
	* Measure the distance of traffic
	* Given input in traffic device
	* Device will response the waiting time and stoping time
# Roads
	* Has many traffic signal points
	* One traffic singnal point to another signal point has some distance
	* Roads has only one starting point and end point

#rutes:
id 	name 		length
1 	207		10 km
2 	210		12km
3	200		20km

#nodes:
id 	rute_id		name 					length
1 	2			Firm Gate 				500m
2 	2			Bijoy Soroni			450m
3 	2			Prodhan montri Karjaloy		400m 
4	1 			Khamarbari				250m
5 	1			Jia Uddan 				250m
6 	1 			Chain Moitri Sommelon		300m 	
7 	3 			Nikaton				400m
8 	3			Tejkuni Para 			350m


#node_addjacency:

id 	node_id		previous_node_id		next_node_id
1	1 			-				2
2 	2  			1 				3
3 	3 			2 				-
4 	4 			-  				5
5 	5 			4 				6
6 	6 			5 				-
7     7 			-				8
8 	8 			7 				2
9 	



	
