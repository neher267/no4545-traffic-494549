<template>
	<div class="question-wap">
		<p class="question" v-text="question.body"></p>
		<div 
			class="col-md-3 col-sm-6 col-xs-12 option" 
			v-text="question.op1"
			@click="submitAns('op1')"
			>			
		</div>

		<div 
			class="col-md-3 col-sm-6 col-xs-12 option" 
			v-text="question.op2"
			@click="submitAns('op2')"
			>			
		</div>

		<div 
			class="col-md-3 col-sm-6 col-xs-12 option" 
			v-text="question.op2"
			@click="submitAns('op3')"
			>			
		</div>

		<div 
			class="col-md-3 col-sm-6 col-xs-12 option" 
			v-text="question.op4"
			@click="submitAns('op4')"
			>			
		</div>

		<p class="correct" v-if="isRight">Ans is Correct</p>
		<p class="wrong" v-if="isWrong">Ans is Wrong</p>

		<div>
			<a class="btn" @click="netQuestion">Next</a>
		</div>
	</div>	
</template>

<script>
	export default {
		data() {
			return {
				question: [],
				isWrong: false,
				isRight: false,
			}
		},

		created() {
			axios.get('/ecl-sites/plc/public/question')
			.then(response => this.question = response.data);
		},

		methods:{
			netQuestion() {
				this.isWrong = false;
				this.isRight = false;
				axios.get('/ecl-sites/plc/public/question')
				.then(response => this.question = response.data);
			},

			submitAns(ans) {
				if(ans === 'op'+this.question.ans){
					this.isRight = true;
					this.isWrong = false;
				}
				else{
					this.isWrong = true;
					this.isRight = false;
				}
				//this.netQuestion();
			}
		}
	}
</script>

<style>
	.question-wap{
		padding: 15px;
	}
	.question{
		font-weight: bold;
		font-size: 16px;
		padding: 10px 0px;
	}

	.option{
		font-weight: 500;
		font-size: 15px;
		padding: 5px 0px;
	}
	.correct {
		font-weight: bold;
		font-size: 15px;
		padding: 5px 0px;
		color: green;
	}

	.wrong {
		font-weight: bold;
		font-size: 15px;
		padding: 5px 0px;
		color: red;
	}
</style>