# -*- coding: utf-8 -*-
"""Untitled2.ipynb

Automatically generated by Colaboratory.

Original file is located at
    https://colab.research.google.com/drive/1OBFUiXzNfWjGl90ayebnWfUxRwPLpxnc

# Logistic Regression

## Importing the libraries
"""

import pandas as pd
import warnings
import pickle
print(pickle.__doc__)
warnings.filterwarnings("ignore")
"""## Importing the dataset"""

dataset = pd.read_csv('odi_new.csv')
X = dataset.iloc[:,[7,8,9,12,13,14]].values
y = dataset.iloc[:, 15].values

"""## Splitting the dataset into the Training set and Test set"""

from sklearn.model_selection import train_test_split
X_train,X_test,y_train,y_test = train_test_split(X, y, test_size = 0.2, random_state = 0)

"""## Training the Logistic Regression model on the Training set"""

from sklearn.linear_model import LogisticRegression
lr = LogisticRegression(random_state=0)
lr.fit(X_train,y_train)

"""## Predicting the Test set results"""

y_pred = lr.predict(X_test)

"""## Making the Confusion Matrix"""

from sklearn.metrics import confusion_matrix
cm = confusion_matrix(y_test,y_pred)
print(cm)

"""## Computing the accuracy with k-Fold Cross Validation"""

from sklearn.model_selection import cross_val_score
accuracies = cross_val_score(estimator = lr, X = X_train, y = y_train, cv = 10)
print("Accuracy: {:.2f} %".format(accuracies.mean()*100))
print("Standard Deviation: {:.2f} %".format(accuracies.std()*100))

pickle.dump(lr,open('model.pkl','wb'))
model=pickle.load(open('model.pkl','rb'))