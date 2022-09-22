
//boxes
const instruction_box = document.querySelector(".instruction-box");
const test_box = document.querySelector(".test-box");

//buttons
const start_btn = document.querySelector(".start-btn");
const next_btn = document.querySelector(".next-btn");
const view_result_btn = document.querySelector(".view-result-btn");
const restart_btn = document.querySelector(".restart-btn");

//parent tags
const question = document.querySelector(".question");
const options = document.querySelector(".options");
const question_indicator = document.querySelector(".question-indicator");

//category tag
r_score = document.querySelector(".r_score");
i_score = document.querySelector(".i_score");
a_score = document.querySelector(".a_score");
s_score = document.querySelector(".s_score");
e_score = document.querySelector(".e_score");
c_score = document.querySelector(".c_score");

instruction_box.classList.add("show");	
let que = 0;

let R = 0;
let I = 0;
let A = 0;
let S = 0;
let E = 0;
let C = 0;	

start_btn.onclick = ()=>{	
	test_box.classList.add("show");
	instruction_box.classList.remove("show");
	instruction_box.classList.add("getaway");
}

function showQuestions(index){
	let question_tag= '<span>'+ questions[index].numb + ". " + questions[index].question +'</span>';
	let option_tag= '<div class="option"><span>'+ questions[index].options[0] +'</span></div>'
	+ '<div class="option"><span>'+ questions[index].options[1] +'</span></div>';

	question.innerHTML = question_tag;
	options.innerHTML = option_tag;

	const opts = options.querySelectorAll(".option");

	for(i=0;i<opts.length; i++){
		opts[i].setAttribute("onclick", "clickOption(this)");
	}
	updateCounter(index)
}

let tickIconTag = '<div class="icon tick">&nbsp;<i class="bi bi-check"></i></div>';
function clickOption(answer){
	let userAns = answer.textContent;
	const allOptions = options.children.length; 

	answer.classList.add("selected");
	answer.insertAdjacentHTML("beforeend", tickIconTag);

	let category = questions[que].category;

	if(userAns == "Agree"){
		switch(category) {
			case "Realistic":
			R = R+1;
			r_score.value = ''+R;
			break;

			case "Investigative":
			I = I+1;
			i_score.value = ''+I;
			break;

			case "Artistic":
			A = A+1;
			a_score.value = ''+A;
			break;

			case "Social":
			S = S+1;
			s_score.value = ''+S;
			break;

			case "Enterprising":
			E = E+1;
			e_score.value = ''+E;
			break;

			case "Conventional":
			C = C+1;
			c_score.value = ''+C;
			break;
		}
	}

		

	next_btn.classList.add("show");	

	if(que==41){
		next_btn.classList.remove("show")
		next_btn.classList.add("getaway")
		view_result_btn.classList.add("show");
		restart_btn.classList.add("show");
	}
}

function updateCounter(index){
	let counterTag = '<small>'+(index+1)+' out of '+questions.length+' items.</small>';
	question_indicator.innerHTML = counterTag;  
}

next_btn.onclick = ()=>{
	que++;
	showQuestions(que);
	next_btn.classList.remove("show");
}

next_btn.onclick = ()=>{
	que++;
	showQuestions(que);
	next_btn.classList.remove("show");
}

view_result_btn.onclick = ()=>{
}
