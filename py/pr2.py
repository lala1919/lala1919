numbers = [1, 2, 3,4]
for i in numbers:
    print(i)
    print(i+4)

for j in range(2):
    print(j)
    print(j+2)

names = ['lee','kim', 'yang', 'park']
for i, names in enumerate(names):
    print(i+1,'번째 사람은 ' +names+ '입니다.')

print(len(names))

rainbow = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'purple']
for i in range(len(rainbow)):
    color = rainbow[i]
    print((color))
    print('무지ㅐ의',i+1,'번째색은 ',color)

numbers = [(1,2),(10,0),(5,5),(6,3)]
for a,b in numbers:
    if b == 0:
        print('no')
    else:
        print(a,'나누기',b,'는 ',a/b)

list1 =[1,2,3,4,5,6,7,8,9,10]
for i in list1:
    if i % 3 == 0:
        print(i)
        break
list2 = [10,20,30,40,50,20]
for i, list2 in enumerate(list2):
    if list2 == 20:
        print(i+1,'번째가 좋아')
        break

for i in range(10):
    if i % 2 ==0:
        print('2는 패스')
        continue
    print(i)

list3 = [1,2,3]
length = len(list3)
i = 0
while i < length:
    # print('HI')
    print(list3[i])
