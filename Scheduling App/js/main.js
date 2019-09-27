var events;
let exams = [];



function onlyUnique(value, index, self) { 
return self.indexOf(value) === index;
}

function saveExams()
{
	events = calendar.getEvents() ;


	for (var i =  0;  i < events.length; i++) {
		var examDate = events[i].start.toString().substring(0,15);
		exams.push(examDate);
	}	


	var unique = exams.filter( onlyUnique ); // returns ['a', 1, 2, '1']

	var examData = [];
	for (var i = 0; i < unique.length; i++) {
		examData[unique[i]] = [];  
	}

	for (var i = 0; i < events.length; i++) {
		examData[events[i].start.toString().substring(0,15)].push(events[i].title); 
	}

	return examData;

}
