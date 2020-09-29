import os

tree = os.walk('C:/Users/Мушка/Desktop/tasks')

dir = []

for i in tree:
    dir.append(i)

for i in dir[0][2]:
    if (i[-5] == "_"):
        print(i,i[0:-5]+i[-4:])

        os.rename(i,i[0:-5]+i[-4:])
