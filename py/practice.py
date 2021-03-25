# print(5)
# print(3.14)
# print(5-2*(3-1))
# print('salt')
# print("salt")
# print('name '*3)
# print(5<=5)
# # print(not (5>=5))
# a=1
# b=2
# c=3
# d="hello"
# print(a+2+b+3+c)
# print(a-2+b*3/2)
# print((a+b)*(c/b)+3.2)
# print(d, a+c)

name = "서라"
animal = "냥님"
when = 5
when = str(when)
# print('우리집 '+ animal +'의 이름은 '+ name +'에요')
# print( name +'는 브리티시숏헤어 암컷이며 아직 태어나지 않았어요')
# print( name +'는 '+ str(when) +'년 안에 데려와 키우는게 목표에요')

becomeFamily="우리집 "+animal+"의 이름은 "+name+"에요\n"+name+"는 브리티시숏헤어 암컷이며 아직 태어나지 않았어요\n"+name+"는 "+when+"년 안에 데려와 키우는게 목표에요"
print(becomeFamily)
# a=0
# # b=2
# # c= (a>b)
# # print (c)
# a=(a)
# b=("")
# c=({})
# d=(None)
# print(a,b,c,d)
# a=bool(a)
# b=bool("")
# c=bool({})
# d=bool(None)
# print(a,b,c,d)
# a=(1,2,3)
# b={4,5,6}
# c=[7,8,9]
# print(a)
# print(a,b,c)

# a= {"name" : "서라","breed" : "브리티시숏헤어"}
# print(a['name'])
# print('우리집고양이 이름은',a['name'],'이고, 품종은',a['breed'],'야')


# station = '인천공항'
# print(station, '행 열차가 들어오고 있습니다')
# print(2**3)
# print(5%3)
# print(5//3)
# # print(3==3)
# # print(4==2)
# # # print(3+4==7)
# # print(1!=3)
# # print(not (1!=3))
# # print(3>8) and (4<5)
# # print((3<2) & (5<8))
# # print ((3<3)or (3<5))
# # print((3<2) | (3<5))
# # print(4>2>1)
# # print(4<4<6)
# print(3+2+5)
# a= 2+5
# a= a+3 
# print (a)
# a*=2
# print(a)
# a+=3
# print(a)
# a/=2
# print(a)
# a+=1.5
# print(a)
# a%=2
# print(a)
# print (abs(-4))
# print (pow(4, 2 ))
# print(max(5,12))
# print(min(4,12))
# print(round(4,9))

# a=5
# b=5
# c=7
# if (a==b):
#     print ('good')
# if (a==c):
#     print ('good')
# if(a!=c):
#     print ('what')
# if(not a==c):
#     print('huh?')

# from datetime import datetime
# a= datetime.now().hour
# print(a)
# b=12
# if(a>b):
#     print ('pm')
# if(a<b):
#     print('am')

# import math
# print(math.pi)
# import random
# a=('1','2','3')
# print(random.choice(a))

# from math import *
# print(floor(5.99))#내림
# print(ceil(4.23))#올림
# print(sqrt(16))#제곱근

# import random
# from random import *
# print(random())#0.0~1.0미만의 임의값
# print(random()*10)#0.0~10.0미만의 임의값
# print(int(random()*10))#0~10미만의 임의값
# print(int(random()*10)+1)#1~10이하의 임의값
# print(int(random()*45)+1)
# print(randrange(1,46))#1~46미만의 임의값
# print(randint(1,45))#1~45이하의 임의값

# from random import *
# a=randint(4,28)
# print("매월" + str(a) +"일 모임입니다.")

# sentence= '나는 사람입니다'
# print(sentence)
# sentence2="나는 학생입니다"
# print(sentence2)
# sentence3="""
# 나는 사람이고
# 학생입니다.
# """
# print(sentence3)

# a = "930219-2111111"
# print('성별 :'+a[7])
# print("년 :"+a[0:2])#0~2전까지
# print(a[0:2]+"년생")
# print(a[:2]+"년"+a[2:4]+"월"+a[4:6]+"일")
# print(a[7:])#7~끝까지
# print("뒤에서부터 "+a[-7:])

# b = "Python is Amazing"
# print(b.lower())
# print(b.upper())
# print(b[0].isupper())
# print(len(b))
# print(b.replace("Python","Java"))

# a =b.index("n")
# print(a)
# c = b.index("n", a + 1)
# print(c)
# print(b.find("Java"))
# # print(b.index("Java"))
# print(b.count("n"))

# print("a"+"b")
# print("a","b")
# print("나는 %d살입니다."%28)
# print("나는 %s을 좋아해요" %"딸기")
# print("apple은 %c로 시작해요"%"A")
# print("나는 %s살입니다."%28)
# print("나는 %s색과 %s색을 좋아해"%("남", "빨간"))

# print("나는 {}살입니다".format(27))
# print("나는 {}색과 {}색을 좋아해요".format("남","빨간"))
# print("나는 {0}색과 {1}색을 좋아해요".format("남","빨간"))
# print("나는 {1}색과 {0}색을 좋아해요".format("남","빨간"))

# print("나는 {a}살이며, {b}색을 좋아해요".format(a="27",b="남"))
# a=27
# b="남"
# print(f"나는 {a}살이며, {b}색을 좋아해요")

# print("백문이 불여일견 \n백견이 불여일타")
# print("""나"공부하기"싫엉""")
# print("배'고'파")
# print("귀\'찮\'아")
# print("뀨\"잉\"뀨")
# print(" C:\\Users\\USER\\Desktop\\workspace\\python>")
# print("red Apple\rPine")
# print("redd\bApple")
# print("red \tApple")

# a="http://naver.com"
# b =a.replace("http://","")
# print(b)
# c=b[:b.index(".")]
# print(c)
# d =c[:3]+str(len(c))+str(c.count("e"))+"!"
# print(d)
# e=a[7:]
# print(e)
# e=e[:e.index(".")]
# print(e)
# e=e[:3]+str(len(e))+str(e.count(e))+"!"
# print(e)
# print("{0}의 번호는 {1}입니다.".format(a,e))

# subway = [10, 20, 30]
# print(subway)
# subway =["유재석","조세호", "박명수"]
# print(subway.index("조세호"))#몇번째?
# subway.append("하하")#덧붙이기
# print(subway)
# subway.insert(1,"정형돈")#끼워넣기
# print(subway)
# print(subway.pop())
# print(subway.pop())
# print(subway)
# print(subway.pop())
# print(subway)
# subway.append("유재석")#덧붙이다
# print(subway)
# print(subway.count("유재석"))

# num_list = [5,2,4,3,1]
# num_list.sort()#순서대로
# print(num_list)
# num_list.reverse()#역순
# print(num_list)
# num_list.clear()#비우기
# print(num_list)

# mix_list = ["IU", 20, True]
# print(mix_list)
# num_list.extend(mix_list)#연장
# print(num_list)

# cabinet ={3:"유재석", 100:"김태호"}
# print(cabinet[3])#없는 번호는 오류get은 none으로 표기
# print(cabinet.get(3))
# print(cabinet.get(4,"사용가능"))
# print(3 in cabinet)
# print(4 in cabinet)

# cabinet ={"A1":"유재석", 'A20':"김태호"}
# print(cabinet["A1"])
# cabinet["A2"] = "조세호"#추가
# cabinet["A1"] = "김종국"#갱신
# print(cabinet)
# del cabinet["A1"]#삭제
# print(cabinet)
# print(cabinet.keys())#키
# print(cabinet.values())#내용
# print(cabinet.items())#전체
# cabinet.clear()#비우기
# print(cabinet)

# my_set ={1,2,3,4,4}
# print(my_set)
# java = {"은지원","강호동","이수근"}
# python = {"은지원", "이수근","마이노"}
# print(java & python)#교집합
# print(java.intersection(python))#교집합
# print(java|python)#합집합
# print(java.union(python))#합집합
# print(java-python)#차집합
# print(python.difference(java))#차집합
# python.add("표지훈")#추가
# print(python)
# java.remove("강호동")#제외
# print(java)

# menu = {"아아","뜨아","라떼"}
# print(menu, type(menu))#뭔타입?
# menu = list(menu)#타입변경?한건가?
# print(menu, type(menu))#뭔타입?

# from random import *
# lst = [1,2,3,4,5,6,7,8,9,10]
# print(sample(lst, 1))