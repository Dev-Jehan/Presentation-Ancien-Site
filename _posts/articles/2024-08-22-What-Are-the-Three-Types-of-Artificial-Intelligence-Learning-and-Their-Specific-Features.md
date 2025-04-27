---
layout: post
title: "What Are the Three Types of Artificial Intelligence and Their Specific Features?"
date: 2024-08-22 15:44:13 +0600
author: "Skyld Labs"
post_image: "/assets/images/blog/articles/COUVERTURE.webp"
badge_color: "bg-perso"
categories: [Edge AI,article]
slider_post: true
---

## **First Type Of Machine Learning Models: Supervised**

**Supervised learning is one of three main types of learning in AI. It is a machine learning method where a model is trained from labelled examples.**

Supervised learning involves providing an algorithm with a training dataset containing examples with the correct output. 

The algorithm then learns from these examples and makes accurate predictions on new data. For each training example, the model compares its prediction with the actual output and adjusts its internal parameters to make the two closer. 

The goal of supervised learning is to create a model that can generalise from the examples and make accurate predictions on new data.

There are several common approaches to supervised learning, including regression and classification.

In regression, the desired output is a continuous value, whereas in classification, the output is a label or category. In regression, we can use supervised learning to predict the price of a house based on its characteristics. 

In classification, we can use supervised learning to classify emails as spam or non-spam based on their content.

Let's look at an example of supervised learning. We want to create an AI model that can recognise fruit. We need a training set of fruit images labelled with the name of the fruit.

The first step in supervised learning is to prepare the training data. This means cleaning, normalising and dividing the data into a training set and a test set. 

The training set is used to train the model, while the test set is used to test it.

We then train our model using a supervised learning algorithm, such as logistic regression, SVMs or neural networks, on the training dataset. The algorithm learns to associate images with fruit classes based on some patterns in the images like colors ect ..

Once the model is trained, we can use it to predict the fruit class for new images. The model looks at the image and tries to guess what it is. If the model sees an apple, it will probably say it's an apple.

![alt text](/assets/images/blog/articles/Supervised.webp){:.centered}

The effectiveness of supervised learning depends on the quality of the training data, the appropriate selection of features and the ability of the algorithm used to generalise to new data. 

A representative and balanced training dataset is essential, as is a rigorous validation process to assess model performance.

## **Second Type Of Machine Learning Models: Unsupervised**

**In supervised learning, examples are labelled. In unsupervised learning, examples are not labelled. It is a type of learning that aims to find hidden patterns and structures in the data.**

Its main goal is to create representations of the data that show similarities, groups or underlying structures. This can be useful in a variety of applications, such as **market segmentation, product recommendation or anomaly detection.**

![alt text](/assets/images/blog/articles/Unsupervised.webp){:.centered}

Common clustering algorithms used in unsupervised learning include:

**→ the K-means algorithm**

**→ the hierarchical clustering algorithm**

By grouping or reducting the input dimension, these algorithms helps to discover hidden structures, new perspectives and making unexpected discoveries. 

However, it can be harder to evaluate and interpret than supervised learning. Choosing the right algorithm and parameters is important for getting meaningful results.

## **Third Type Of Machine Learning Models: Reinforcement**

**Reinforcement learning is one of the three main types of learning in artificial intelligence, alongside supervised learning and unsupervised learning. In this type of learning, an agent interacts with an environment, takes actions and receives rewards or punishments depending on the quality of its decisions.**

![alt text](/assets/images/blog/articles/Environnement.webp){:.centered}

One of the main concepts in reinforcement learning is the value function. It is used to evaluate the long-term consequences of actions taken by the agent.

There are two types of value function commonly used:

**→ the state value function (V)**

**→ the action value function (Q).**

The state value function estimates the value of a given state, while the action value function estimates the value of a state-action pair.

Reinforcement learning can be used to solve many problems. It learns from its own experiences without needing to be told what to do. This makes it good for situations where there is little or expensive information.

However, reinforcement learning also has problems. One challenge is exploring and exploiting. The agent must find a balance between exploring new actions and exploiting the knowledge it has gained. 

Finding this balance can be difficult. If the agent explores too much, it will waste resources. If it exploits too much, it will not learn.

Another challenge of reinforcement learning is learning in the presence of scarce rewards. If rewards are scarce, the agent may find it hard to learn an effective action policy because it doesn't get enough feedback to adjust its decisions.

Reinforcement learning is used in many areas, including games, robotics, supply chain management and finance. For example, it has been used to train agents to play Go or Dota 2 better than humans.
