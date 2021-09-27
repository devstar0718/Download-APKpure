import json
from selenium import webdriver

print('Starting selenium')
driver = webdriver.Chrome('./chromedriver.exe')
driver.get("https://google.com")
driver.close()
urls = ['https://a.com', 'https://b.com']
# print(json.dumps(urls))
f = open("urls.txt", "w")
f.write(json.dumps(urls))
f.close()