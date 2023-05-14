var names=new Array();
names[0]="Anil";
names[1]="John";
names[2]="jenifer";
names[3]="Tarun";
names[4]="Karthik";
names[5]="Jason Roy";
names[6]="larry";
names[7]="paula";
names[8]="laura";
names[9]="jim";


for (var i = 0; i < names.length; i++) {
	if(names[i].charAt(0)==='J'|| names[i].charAt(0)==='j'){
        console.log("Goodbye "+ names[i])
	}
	else{
		console.log("Hello "+ names[i])
	}
}
