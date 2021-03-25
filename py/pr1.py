# id = 'pencil'
# num =324
# plus = 124
# minus =224
# multiply = 2.4
# divide = 5.5
# # print('웅엥엉' + id+ str((num+plus-minus)*multiply/divide))
# a="hello"
# b='world'
# c="""
# gkrltlfgdjgggg"""
# d='''
# 이것도
# 되던가?
# 잘되네
# '''
# # print(a,b,c,d)

# ㅁ=1
# ㅂ=2
# ㅊ=bool(ㅁ<ㅂ)
# # print(ㅊ)
# # print(bool(""))
# # print(bool([]))
# # print(bool(None))
# t1 =(1,2,3)
# # print(type(t1))
# t2=1,2,3
# # print(type(t2))
# l=['one']
# # print(l)
# t=("one",)
# # print(t)
# # print(type(t))
# # print(type(l))

# t1=1,2,3
# t1[0]='one'
# # print(t1)
# l1=[1,3,4]
# l1[0]="one"
# # print(l1)
# Banana = None
# Apple = None
# People =None

# Banana = 2
# Apple = 3
# if Banana == Apple:
# #     print('good')
# # if Banana != Apple:
# #     print('oh')
# # if not Banana != Apple:
# #     print('뇸뇸')
# # People =2
# # if People ==Banana and People ==Apple:
# #     print("욕심쟁이")
# # elif People ==Banana or People ==Apple:
# #     print('너가 하나더먹어라')

# q = None
# b = None
# q = 10
# b = 20
# temp = q
# q = b
# b = temp
# # print(q,b)
# c = None
# d = None
# c=1
# d=2
# c,d=d,c
# # print(c,d)

# from datetime import datetime
# a = datetime.now()
# b = datetime.now().hour
# c = datetime.now().minute
# # print('현재시간은',b,'시',c,'분입니다')

# import math 
# a = math.pi
# # print(a)
# b = math.floor(2.6)
# # print(b)

# import random
# rainbow = None
# rainbow = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'purple']
# a = random.choice(rainbow)
# b = random.choice(rainbow)
# if a == b:
#     b = random.choice(rainbow)
# # print(a,b)
# random.shuffle(rainbow)
# print(rainbow)
# import random
# dice = [1,2,3,4,5,6]
# a = random.choice(dice)
# # print('주사위값은 ',a,'입니다')

def add(a,b):
    result = a + b
    print("{} = {} + {}".format(result, a, b))
# add(8,2)

def add10(a):
    d = a + 10
    print(d)
# add10(5)

def banolim(a):
    result = round(a)
    print("{}를 반올림하면 {}이다".format(a, result))
# banolim(3.7)


rainbow = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'purple']
first = rainbow[0]
last = rainbow[-1]
# print("{}부터 {}까지 다좋아".format(first, last))

list1 = [1, 2]
list1.append(3)
list1.append(1)
a = '이거도 되려나'
list1.append(a)
list2 = [93, 2, 19]
list1.append(list2)
list1 +=[60, 9, 20]
list1 += list2
# print(list1)
del list1[0]
list1.remove(2)
# print(list1)
yu = 1
if yu in list1:
#     print('yes')
# else:
#     print('no')
    print('a')
