class secureInput {

		constructor(inputs)
		{
			this.inputs = inputs;
		}

		callInput()
		{
			
			alert(`votre nom est : ${this.inputs}`)
		}

		showInput()
		{
			let val=[]
			for(let i=0; i<this.inputs.forms.elements.length-1; i++)
			{
				val.push(this.inputs.forms.elements[i].value)
			}
			console.log(val)
			return val
			
		}

		secure_input_length(input)
		{
			return (input.length >4 && input.length <255)
		}

		secure_email(input)
		{
			return (input.indexOf('@') <0)?false : true
		}

	}