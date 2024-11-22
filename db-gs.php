import gspread
from oauth2client.service_account import ServiceAccountCredentials

# Replace with your spreadsheet's ID and range name
spreadsheet_id = "1lZFhqY0znNAtajHlOlJMEzK8Agz4mVJ86vBq4kdDCGA"
range_name = "b2"

# Replace with the full file path of your JSON key file
json_key_file = "Your-key.json"

# Authenticate and set up the spreadsheet
credentials = ServiceAccountCredentials.from_json_keyfile