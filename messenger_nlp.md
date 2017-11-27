## ADDING NLP FUNCTIONALITY

After following the instructions [here](https://developers.facebook.com/docs/messenger-platform/built-in-nlp/), head over to the
`recieved message` function and assign the nlp payload that you want as shown in the example below.

```
elif nlp:
	nlp_payload = nlp.get('entities')
        if 'greetings' in nlp_payload:
            nlp_greet = nlp_payload.get('greetings')
            # Function that responds to a greeting
            hello(sender_id)

```

The snippet above runs the hello function whenever a greeting is sent to the bot. This is because when a message is detected as
being a greeting, facebook sends the string 'greetings' to your bot whenever a user sends a greeting to you bot. 

To attach a new function to an input from a user, just add another elif statement as shown below:

```
elif nlp:
	nlp_payload = nlp.get('entities')
        if 'greetings' in nlp_payload:
            nlp_greet = nlp_payload.get('greetings')
            # Function that responds to a greeting
            hello(sender_id)
      
        elif 'thanks' in nlp_payload:
            nlp_greet = nlp_payload.get('thanks')
            # Function that responds to a user saying thank you
            thanks(sender_id)

```

A list of what facebook will send to your bot depending on user input [here .](https://developers.facebook.com/docs/messenger-platform/built-in-nlp#entities)
