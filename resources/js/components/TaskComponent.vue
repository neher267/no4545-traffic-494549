<template>
	<div class="ml-20">
		<ul>
			<li v-for="task in tasks" v-text="task"></li>
		</ul>

		<input type="text" v-model="newTask" @blur="createNewTask">
	</div>
</template>

<script>
	export default{
		data(){
			return {
				tasks: [],
				newTask: '',
			}
		},

		created() {
			axios.get('/ecl-sites/plc/public/tasks')
			.then(response => this.tasks = response.data);

			window.Echo.channel('tasks').listen('TaskWasCreated', ({task})=>{
				this.tasks.push(task.body);
			});
		},

		methods:{
			createNewTask() {
				axios.post('/ecl-sites/plc/public/tasks', {body:this.newTask})
				.then(()=>{
					this.tasks.push(this.newTask);
					this.newTask = '';
				});
			}
		}
	}
</script>

<style>
	.ml-20{
		margin-left: 20px;
	}
</style>