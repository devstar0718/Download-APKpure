from selenium import webdriver
from pyquery import PyQuery as pq
import json
import requests



driver = webdriver.Chrome('./chromedriver.exe')
hrefs = []
for i in range(1, 11):
    driver.get("https://apkpure.com/game?sort=new&page=" + str(i))
    doc = pq(driver.page_source)
    # print(driver.page_source)
    # r = requests.get("https://apkpure.com/game?sort=new&page=" + str(i))
    # print(r.content)
    # doc = pq(r.content)
    for download in doc('ul#pagedata li div.category-template-down a'):
        hrefs.append('https://apkpure.com' + download.attrib['href'])
    # for href in hrefs:
        # print(href)
        # driver.get(href)
    # break

driver.close()

# print(json.dumps(hrefs))
f = open("urls.txt", "w")
f.write(json.dumps(hrefs))
f.close()