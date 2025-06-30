todays_temperatures = [23, 32, 33, 31]
todays_temperatures.append(29)
print(todays_temperatures)

morning = todays_temperatures.pop(0)
print("This mornings temperature was %.02f" % morning)

late_morning = todays_temperatures.pop(0)
print("Todays late morning temperature was %.02f" % late_morning)

noon = todays_temperatures.pop(0)
print("Todays noon temperature was %.02f" % noon)

print(todays_temperatures)