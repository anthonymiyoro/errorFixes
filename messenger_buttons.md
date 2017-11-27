## WORKING WITH BUTTONS

We have 2 types of buttons in our templates, postback buttons and quick replies.
More information on buttons can also be found [here](https://github.com/conbus/fbmq/blob/master/README.md)

### POSTBACK BUTTONS

Postback buttons are handled within the `received_postback` function which responds to a given payload.

```
@page.handle_postback
def received_postback(event):
    sender_id = event.sender_id
    recipient_id = event.recipient_id
    time_of_postback = event.timestamp

    payload = event.postback_payload

    if payload == "SELECT_BRANCH":
        select_room_message(sender_id,event)
        show_hotel_room(sender_id)

    elif payload == "SELECT_ROOM":
        book_another(sender_id)
        # confirm

```

### QUICK REPLY BUTTONS

Quick reply buttons are handled in the `recieved message` function along with the rest of the incoming messages from the user.

```
@page.handle_message
def received_message(event):
    sender_id = event.sender_id
    recipient_id = event.recipient_id
    time_of_message = event.timestamp
    message = event.message
    
     if quick_reply:

        quick_reply_payload = quick_reply.get('payload')
        if quick_reply_payload == 'CONFIRM':
            book_another(sender_id)

        elif quick_reply_payload == 'BOOK_ANOTHER_ROOM':
            show_hotel_room(sender_id)

        elif quick_reply_payload == 'RESERVATION':
            send_receipt(sender_id)
    
    
```

