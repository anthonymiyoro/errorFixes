# HOW TO DEPLOY TO HEROKU 

After clicking the click to deploy buttons below, your selected template will be hosted and deployed ontu Heroku automatically. The only issue is that the config.py file does not contain your specific Facebook page keys and server url.

To fix this, follow the following steps;

1. Dowload the heroku CLI from [here](https://devcenter.heroku.com/articles/heroku-cli). 

2. Once heroku has been installed, open the heroku [dashboard](https://dashboard.heroku.com/apps).
Select your newly created app and navigate to the deploy section as shown in the images below.

![Overview](https://github.com/anthonymiyoro/Bot-Builder-Site/blob/master/images/overview.png "").


![Deploy](https://github.com/anthonymiyoro/Bot-Builder-Site/blob/master/images/deploy.png "")

3. Run the code indicated in the image below to get a copy of your bot template and navigate to its folder in your terminal.

![Run](https://github.com/anthonymiyoro/Bot-Builder-Site/blob/master/images/install-amended.png "")

4.If you had selected the hotel bot, run the code below in your terminal:

```
git remote add origin https://github.com/anthonymiyoro/HotelBotExample.git

```

While if you had selected the shopping bot, run the code below in your terminal:

```
git remote add origin https://github.com/anthonymiyoro/shopping_bot_example.git

```

Then run ``` git pull origin master ```.

5. Open your config.py file and fill in the required variables replacing FACEBOOK_TOKEN_HERE with you facebook app pages' token and SERVER_URL_HERE with the url of your newly created heroku server.

The config.py file should look like the snippet below:

	```
	CONFIG = {
     'FACEBOOK_TOKEN': 'FACEBOOK_TOKEN_HERE',
     'VERIFY_TOKEN': 'my_verify_token',
     'SERVER_URL': 'SERVER_URL_HERE'
 	}

	```

When filled, it should look like the snippet below:

	```
	CONFIG = {
     'FACEBOOK_TOKEN': 'EAAHUC2GIMSoZAioyW4orexO9tCCHvdCCnC2GIMSoZAioyW4orexO9tCCHvdCC2GIMSoZAioyW4orexO9tCCHvdCLF1mFlnqC2GIMSoZAioyW4orexO9tCCHvdCxdLF1mFlnqC2GIMSoZAioyW4orexO9tCCHvdC',
     'VERIFY_TOKEN': 'my_verify_token',
     'SERVER_URL': 'https://site-example-name.herokuapp.com/'
 	}
 	
	```

6. Once filled, save your config.py file and head over to the heroku [dashboard](https://dashboard.heroku.com/apps) and select your previously created app. 

7. Once selected you should se something similar to the image below: 

![Overview](https://github.com/anthonymiyoro/Bot-Builder-Site/blob/master/images/overview.png "").

Navigate to the deploy section and then select the heroku-git option as shown in the image below:

![Deploy](https://github.com/anthonymiyoro/Bot-Builder-Site/blob/master/images/deploy.png "")

Ensure you have navigated to the folder containing your bot and type in the given commands to your terminal as indicated in the image below:

![Install](https://github.com/anthonymiyoro/Bot-Builder-Site/blob/master/images/install.png "")




# HOW TO DEPLOY YOUR BOT LOCALLY

1. Download your desired bot template from the website

2. Dowload ngrok from their [page](https://ngrok.com/download).

3. On Linux or OSX you can unzip ngrok from a terminal with the following command. 

	```
	unzip /path/to/ngrok.zip

	```
	On Windows, just double click ngrok.zip.

4. Navigate to the folder containing the unzipped contents of ngrock and run it with the command ./ngrok . You should see something similar to the image below on your terminal.

5. Copy and replace the facebook token and server url in the config.py file and replace FACEBOOK_TOKEN_HERE with the facebook page token selected as in the instructions above and SERVER_URL_HERE with the url displayed after running ngrok:

	```
	CONFIG = {
     'FACEBOOK_TOKEN': 'FACEBOOK_TOKEN_HERE',
     'VERIFY_TOKEN': 'my_verify_token',
     'SERVER_URL': 'SERVER_URL_HERE'
 	}

	```

6. Run your bot by running python server.py after saving your changes to the server.py file. 

7. Head over to your apps page on the Facebook for Developers site and under products, select webhooks.

	![URL subscription](https://github.com/anthonymiyoro/Bot-Builder-Site/blob/master/images/subscription.png "")

	Once selected click on edit subscription and copy your https url (as shown below) from ngrock in your terminal to the Callback URL section followed by /webhook. 
	
	![ngrok](https://cdn-images-1.medium.com/max/1600/1*LtnvanCk2-ZVJY1kA0cMfQ.png "")
	
	According to the image above, our callback url will be 

	```
	https://bd2cb171.ngrok.io/webhook

	```
	Under the Verify Token field of the page subscription, add 
	```
	my_verify_token

	```
	as seen in the config.py file. 
	
	![Webhook](https://github.com/anthonymiyoro/Bot-Builder-Site/blob/master/images/webhook.png "")
	
	You can then click on the verify and save button to save the webhook.






