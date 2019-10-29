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

}//function saveExams()

function save(events)
{

	var data =[];
	var datum =[];

	for (var i = 0; i < events.length; i++) 
	{
		datum[0] = events[i]['title'];
		datum[1] = events[i]['start'];
		datum[2] = events[i]['end'];
		data.push(JSON.stringify(datum));
	}
	post('save.php',data);
}//function save()



function post(path, params, method='post') {

  const form = document.createElement('form');
  form.method = method;
  form.action = path;

  for (const key in params) {
    if (params.hasOwnProperty(key)) {

      const hiddenField = document.createElement('input');
      hiddenField.type = 'hidden';
      hiddenField.name = key;
      hiddenField.value = params[key];
      form.appendChild(hiddenField);
    }
  }

  document.body.appendChild(form);
  form.submit();
}//function post() 