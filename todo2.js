const todoList = [];
const baseTodoId = 'todoitem';


let date = new Date();


function deleteElement(id) {
    const index = todoList.findIndex(item => item.id === id);
    todoList.splice(index, 1);
    document.getElementById(baseTodoId + id).remove();
}

function createNewId() {
    return todoList.length === 0 ?
        1 : Math.max(
            ...todoList.map(todo => todo.id)
        ) + 1;
}

function addToDo() {

    const form = document.forms.toDoForm;
    const newTodo = {
        id: createNewId(),
        title: form.elements.title.value,
        color: form.elements.color.value,
        description: form.elements.description.value
    }
    todoList.push(newTodo);
    addToDoToHtml(newTodo);

}




/*
const index = todoList.findIndex(item => item.id === id);
document.getElementById(baseTodoId + id);
	

const clickFunc = (up, index) => 
{
	if (!(up && id === 0) && !(!up && id === list.length - 1)) 
	{
		  
		const positionChange = (up) ? -1 : 1;

		list[id].di += positionChange;
		list[id + positionChange].id += positionChange * -1;
		
		list.sort((a, b) => (a.id - b.id));
	}  
}

*/


function change(){



var itemListParent = document.querySelector('.col');
var itemList = document.querySelectorAll('.card');

document.querySelectorAll('.q').forEach( (e,i) => {	e.addEventListener('click', ()=> console.log("position button",i))
 const sum=[];
 
 
 
var k=1;
sum.push(k);
for (let j = 0; j < 1000; j++){
	k=k+4;
	sum.push(k);

/*if (i%2 === 0){*/
	var p=i+i+1;
	console.log("summ_indexes card",p);
	i=sum.indexOf(p);
	console.log("position card",i);
	itemListParent.insertBefore(itemList[i], itemList[i-1]);
/*}*/
}
 })




/*
else{
	var p=i+i-1;
	i=sum.indexOf(p);
	
	itemListParent.insertBefore(itemList[i], itemList[i+1]);
}*/



}



// сработает как appendChild (т.к. второй аргумент null) - поместит второй элемент в конец родительского.
//itemListParent.insertBefore(itemList[1], null);
// вставит пятый элемент перед первым
//itemListParent.insertBefore(itemList[4], itemList[0]);





function addToDoToHtml(newToDo) {


    const div = document.createElement('div');
    div.id = baseTodoId + newToDo.id;
    div.className = 'row my-3';
    div.innerHTML = `<div class="col">
	
                        <div class="card comma" style=" margin-top:80px; padding: 10px 10px 10px 10px">
						
                            <div class="card-header" style="height: 40px; background-color: ${newToDo.color}"></div>
							
                            <div class="card-body">
								
                                <h5 class="card-title"> ${newToDo.title} </h5>
                                <p class="card-text"> ${newToDo.description} </p>
								<div class="comma">
									<input id="date" type="date" value="2023-12-12">
								</div>
                                <button type="button" class="btn btn btn-link" onclick="deleteElement(${newToDo.id})"> Удалить задачу </button>
								
								
								<button type="button" class="btn btn btn-link fl_right clear q" id="i" onclick="change()"> ↓ </button>
								
								<div class="font-xs inspace-15">${date}</div>
								
								
								
                            </div>
                        </div>
						
						
						
						
                     </div>`
					 
	
	
	/*localStorage.setItem('user', JSON.stringify(div.innerHTML));
	var val=JSON.parse(localStorage.getItem('user'));*/
	

	document.getElementById('toDoContainer').append(div);
	
	/*renderTasks();*/

}


