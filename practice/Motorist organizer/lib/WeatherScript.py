#!/usr/bin/env python3
import requests

data_temp  = open("Temp.txt", "w")
data_weather = open("Weather.txt", "w")
"""API CONST"""
appid = "65123116875e9604b8d5d5d14c59c5b8"
#s_city = input("input your region: ")
s_city = "Moscow"
"""mnemonic names"""


def getCityId(s_city, appid):
    """Function to get city id"""
    try:
        res = requests.get("http://api.openweathermap.org/data/2.5/find",
                     params={'q': s_city, 'type': 'like', 'units': 'metric', 'lang': 'ru', 'APPID': appid})
        data = res.json()
        cities = ["{} ({})".format(d['name'], d['sys']['country'])
                  for d in data['list']]
        print("city:", cities)
        city_id = data['list'][0]['id']
        print('city_id=', city_id)
    except Exception as e:
        print("Exception (find):", e)
        pass
    return city_id

def weatherRT(city_id, appid):
    """Function for Real Time Weather"""
    try:
        res = requests.get("http://api.openweathermap.org/data/2.5/weather",
                        params={'id': city_id, 'units': 'metric', 'lang': 'ru', 'APPID': appid})
        data = res.json()
        print("conditions:", data['weather'][0]['description'])
        print("temp:", data['main']['temp'])
        print("temp_min:", data['main']['temp_min'])
        print("temp_max:", data['main']['temp_max'])
    except Exception as e:
        print("Exception (weather):", e)
        pass

def weatherFD(city_id, appid):
    """Function for five day weather"""
      try:
        res = requests.get("http://api.openweathermap.org/data/2.5/forecast",
                            params={'id': city_id, 'units': 'metric', 'lang': 'ru', 'APPID': appid})
        data = res.json()
        print('city:', data['city']['name'], data['city']['country'])
        for i in data['list']:
            data_temp.write('\n{0:+3.0f}'.format(i['main']['temp']))
            data_weather.write("\n")
            data_weather.write(i['weather'][0]['description'])
            print((i['dt_txt'])[:16])
    except Exception as e:
        print("Exception (forecast):", e)
        pass
    data_temp.close()
    data_weather.close()

def main(s_city, appid):
    city_id = getCityId(s_city, appid)
    weatherRT(city_id, appid)
    weatherFD(city_id, appid)

main(s_city, appid)
