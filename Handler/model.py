from django.db import models


# create models

class User:
    id
    name = models.CharField(max_length=100)
    email = models.CharField(max_length=30)
    password = models.CharField(max_length=6)
    residence = models.TextField()
    telephone = models.CharField(max_length=1)
    wordUnit = models.TextField()
    IDType = models.IntegerField()
    IDNo = models.CharField(max_length=18)
    partActivity:参加的活动列表，分号分割


class Topic():
    id
    subject = models.TextField()  # 主题
    content = models.TextField()  # 话题内容
    signUp = models.IntegerField()  # 报名人数
    sponsor = models.ForeignKey()  # 话题发起人
    location = models.TextField()  # 举办地点
    receiver = models.TextField()  # 活动接受者
    time:提出问题时间
    tag:标签
    validate:该话题是否还是有效的
    type:Integer 0：提问，1：分享


class Question():
    id
    ativity_id = models.ForeignKey(Topic)
    receiver = models.ForeignKey(User)  # 工程师
    question_content = models.TextField()
    answer_content = models.TextField()

class Record():
    id
    activity_id: 对应活动id
    summary
    photoList: 跟activity是一样的 url;url



class Activity():
    id
    topic:ForeignKey
    startTime:Date
    location:
    description
    sponor：活动发起人
    photoList:跟record是一样的
    partUsers:参与活动的用户










