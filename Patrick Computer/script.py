from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.desired_capabilities import DesiredCapabilities
import time

url = "http://192.168.1.40/login.html"


driver = webdriver.Firefox(executable_path=r'/usr/local/bin/geckodriver')
driver.get(url)

username_elem = driver.find_element_by_name('username')
username_elem.send_keys("Patrick")
password_elem = driver.find_element_by_name('pass')
password_elem.send_keys("wumbology")
btn_elem = driver.find_element_by_id('btn')
btn_elem.submit()

time.sleep(1)

current_url = driver.current_url
print current_url
if current_url != "http://192.168.1.40/index.php":
    print "Fishing"
    username_elem = driver.find_element_by_name('username')
    username_elem.send_keys("Patrick")
    password_elem = driver.find_element_by_name('pass')
    password_elem.send_keys("wumbology")
    btn_elem = driver.find_element_by_id('btn')
    btn_elem.submit()

print "Close"
driver.close()
