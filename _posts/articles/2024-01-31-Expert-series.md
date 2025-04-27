---
layout: post
title: "Expert Series : Thibault Maho."
author: "Skyld Labs"
date: "2024-01-31" 
post_image: "/assets/images/blog/articles/chess.webp"
badge_color: "bg-perso"
categories: [ML security,article]
slider_post: true
---

<p>After working at xBrain, Thibault Maho started a Ph.D. whose title you may not understand: « Input Space Exploration for the security of neural network models ». However, his research works impact directly the trust you can have in artificial intelligence systems.</p>

<h4>Can you describe your research to a non-specialist?</h4>
<p>Neural networks are artificial intelligence algorithms. They are everywhere: for example, in autonomous cars, automatic translation tools, social networks recommendation algorithms, and vocal assistants. They make decisions for us (a car will decide whether to brake or accelerate), and we make decisions based on their outputs (will we read and believe this article?)</p>
<p>Therefore, we need to trust the output of neural networks.</p>
<p>In my thesis, I create attacks to fool these algorithms, and I also design defenses against these attacks.</p>

<h4>Is it possible to mislead an artificial intelligence system?</h4>
<p>Yes. This is what experts call an adversarial example. Attackers introduce a perturbation inside an image, a text, or a sound so that the algorithm will interpret it differently than expected. The most famous example is the panda which is interpreted as a gibbon.</p>
<p>Adversarial examples are a threat to all kinds of neural networks. Autonomous cars, of course, are the most conspicuous example, as we can directly see the impact on our safety if they misinterpret signs. Also on the social networks recommendation systems, where fake news articles can bypass detection and spread throughout a network.</p>
<img src="/assets/images/blog/articles/panda.webp" width="569" height="319">
<p>Adding a small perturbation changes the output of a model.</p>

<h4>Is it easy to build adversarial examples?</h4>
<p>I work in a black box setting. It means that I don’t leverage the internals of a system. I mimic the functioning of a system on the internet: I can send requests and observe answers, and no more. The opposite is known as a white box, where the attackers access all parameters of the algorithm. If I assume that the attackers know nothing about the attacked system, they need over a thousand requests to the server to be able to build the example. But we can also consider that the attackers already have access to an algorithm that performs a similar task. In this case, the attackers can build the perturbation in a white box setting and transfer the perturbation to the attacked algorithm. It is much easier and requests less than ten requests to the target.</p>

<h4>How do you build defenses against adversarial attacks?</h4>
<p>You can either focus on building robust algorithms that are not prone to adversarial attacks or preprocess images to remove perturbations. Building robust algorithms often result in a trade-off between accuracy and robustness. The accuracy loss may not be acceptable.</p>
<p>The other solution is to remove the perturbation before feeding the image into the algorithm. Compression is a way to achieve that. Another technique is to add a random on different parts of the image, get a prediction, and iterate. By voting on the predictions obtained with multiple randomized images, we decrease the power of the perturbation and achieve a correct prediction.</p>

<h4>In a conclusion, what are your final thoughts on machine learning security? Would you let your kids in an autonomous car?</h4>

<p>Nowadays, there is a tendency to overestimate the abilities of neural networks. We can tell that they work, but we don’t understand yet why they work and how to improve them. The trend is to bigger and bigger networks, which need tremendous computing capacity to get trained, like thousands of TPU that cost 50K€ each. Only a few actors can train big networks: Google, Microsoft, Meta, and Amazon. They open source their result, and smaller companies fine-tune the algorithms to their needs.</p>
<p>The resulting algorithms are quite similar and homogeneous. The attacks can effectively transfer from one algorithm to the other. Training smaller algorithms, and removing unnecessary weights, give a smaller attack exposure. We know that the attacks leverage the useless neurons: removing them is a powerful method to reduce the risk.</p>
<p>To do so, it is of utmost importance to better understand how the decisions are taken. What are the attention points of a neural network in an image or a sentence? There is a huge synergy between the explicability of networks and their security. We need to better understand how decisions are taken to better understand attacks and build effective defenses.</p>