<template>
	<div>
		<div v-for="question in questions">
			<div class="question-rap" v-if="question.active">
				<h2 class="question" v-text="question.qsn" @click="diactivate(question)"></h2>
			</div>
			<options v-bind:options="question.options" v-bind:ans="question.ans"></options>
		</div>	
			
	</div>


</template>

<script>
	export default {
		data() {
			return {
				questions:[
					{qsn: "What is your name?", active:true, ans: "Neher Ranjan Halder", options:[{op:"Neher Ranjan Halder"}, {op:"Barun Mistry"}]},
					{qsn: "What class do you reading?", active:true, ans: "M.Sc in CSE",  options:[{op:"M.Sc in CSE"}, {op:"B.Sc in CSE"}]},
					{qsn: "What is your father name?", active:true, ans: "Mr. Naresh Chandra Halder",  options:[{op:"Mr. Naresh Chandra Halder"}, {op:"Mr. Sunil Maitra"}]},
					{qsn: "What is your mother name?", active:true,  ans: "Mrs. Kabira Rani Roy", options:[{op:"Mrs. Kabira Rani Roy"}, {op:"Mrs. Ranju Rani Halder"}]},
				],
			}
		},

		methods:{
			diactivate(question) {
				question.active = false;
			}
		}
	}
</script>

<style>
	.question-rap {
		padding: 5px;
		border-bottom: 1px solid #ddd;		
	}

	.question {
		font-weight: bold;
		margin-bottom: 15px;
		font-size: 20px;
	}
</style>