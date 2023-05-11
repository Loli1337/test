import requests
import json

# Replace this URL with your own webhook URL
webhook_url = "https://discord.com/api/webhooks/996362386757926912/qt4taoKg1iFZZQA7ShtH1VmECjN983AJYwCEJM3bBJdK9TtMhOZ1KxvaX-NNZEdEuQd4"

# Define the message payload
payload = {
    "content": "Hello, world!"
}

# Convert the payload to a JSON string
payload_json = json.dumps(payload)

# Send the POST request to the webhook URL
response = requests.post(webhook_url, data=payload_json, headers={"Content-Type": "application/json"})
