from selenium import webdriver
from pyquery import PyQuery as pq

driver = webdriver.Chrome('./chromedriver.exe')
for i in range(1, 10):
    driver.get("https://apkpure.com/game?sort=new&page=" + str(i))
    doc = pq(driver.page_source)
    hrefs = []
    for download in doc('ul#pagedata li div.category-template-down a'):
        hrefs.append('https://apkpure.com' + download.attrib['href'])
    for href in hrefs:
        print(href)
        driver.get(href)

driver.close()
