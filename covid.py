import requests
r = requests.get("https://bing.com/covid")
print(r.headers)