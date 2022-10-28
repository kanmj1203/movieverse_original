
import requests
from bs4 import BeautifulSoup
from urllib.request import urlopen
import json

key = '13e4eba426cd07a638195e968ac8cf19'

if __name__ == "__main__":
    i = 1
    while i <= 10:
        url = f'https://api.themoviedb.org/3/discover/movie?api_key={key}&with_watch_providers=8&watch_region=KR&language=ko&page={i}'

        httpResponse = urlopen(url)
        jsondata = json.load(httpResponse)
        res_num = len(jsondata['results'])
        print(i)
        print(i)
        print(i)
        if res_num :
            for resCount in range(res_num):
                print(jsondata['results'][resCount]['title'])
        i = i + 1



            # response = requests.get(url)
    # if response.status_code == 200 :
    #     html = response.text
    #     soup = BeautifulSoup(html, 'html.parser')
    #     print(soup.get("results"))
    #     if soup.get("results") != [] :
    #         #print(soup)
    #         i = i + 1
    #     print('=============================')
    # else :
    #     print(response.status_code)
    # for dataList in jsondata :
    #     print(dataList['page'])
    # print(jsondata)
# 출처: https://prup.tistory.com/66?category=993695 [prup:티스토리]

# 스토리보드
# ERD, 디자인 (화면캡쳐)
