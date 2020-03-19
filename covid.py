
import json,urllib.request
url = "https://corona.lmao.ninja/countries"


data = urllib.request.urlopen(url).read()
output = json.loads(data)
print (output)