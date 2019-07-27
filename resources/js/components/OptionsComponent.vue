<template>
	<div class="row">
		<h3 class="col-md-3 col-sm-6 optionss" v-for="option in results" v-text="option.op" @click="checkAns(option)">
		</h3>
		<div class="col-md-12">
			<span class="ans" v-if="isCorrect">Correct!</span>
			<span class="ans" v-if="isWrong">Wrong!</span>
		</div>
	</div>
</template>

<script>
	export default {
		props: ['options', 'ans'],

		data() {
			return {
				results: this.options,
				correct_ans: this.ans,
				isCorrect:false,
				isWrong:false,
			}
		},

		methods: {
			checkAns(option) {
				this.isCorrect = option.op == this.correct_ans;
				this.isWrong = option.op != this.correct_ans;
			}
		}
	}
</script>

<style>
	.optionss {
		font-weight: bold;
		font-size: 15px;
		padding: 8px;
		margin-left: 25px;
	}
	.ans{
		font-weight: bold;
		margin-left: 25px;
	}
</style>