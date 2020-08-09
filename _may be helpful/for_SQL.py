#номер задания и кол-во подтипов
task,n = 17,2

print('/*                      ЗАДАНИЕ ',task,'                    	 */',sep='')
for i in range(1,n+1):
    print('if (!$_POST[t',task,'_',i,']) ','$t',task,'_',i,' = 0;',' else $t',task,'_',i,' = $_POST[t',task,'_',i,'];',sep="")


print('$t',task,' = ',end='',sep='')
for i in range(1,n+1):
    print('$t',task,'_',i,'*',round(100/n),sep='',end='')
    if (i!=n):
        print(' + ',end="")
print(';')


print('mysqli_query($connect, "INSERT INTO `',task,'`','(`id`,`',task,'`',sep='',end='')
for i in range(1,n+1):
    print(',`',task,'.',i,'`',sep='',end='')
print(")\n                                VALUES ('$id','$t",task,"'",sep='',end='')
for i in range(1,n+1):
    print(",'$t",task,'_',i,"'",sep='',end='')
print(")",'");',sep='')
