from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.service import Service
from webdriver_manager.chrome import ChromeDriverManager
import time


driver = webdriver.Chrome(service=Service(ChromeDriverManager().install()))

driver.get("http://127.0.0.1:5500/login.html")
driver.maximize_window()


time.sleep(2)


driver.find_element(By.ID, "userid").send_keys("hello@gmail.com")
driver.find_element(By.ID, "password").send_keys("123456")


driver.find_element(By.ID, "submit").click()


time.sleep(3)
print("Test Passed! Page title after login:", driver.title)



# driver.quit()