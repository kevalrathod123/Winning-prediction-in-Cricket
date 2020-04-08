import pandas as pd
# Importing the dataset
dataset = pd.read_csv('data/t20.csv')
X = dataset.iloc[:,[7,8,9,12,13,14]].values
y = dataset.iloc[:, 15].values


# Splitting the dataset into the Training set and Test set
from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.25, random_state = 0)

# Feature Scaling
from sklearn.preprocessing import StandardScaler
sc = StandardScaler()
X_train = sc.fit_transform(X_train)
X_test = sc.transform(X_test)


# Training the dataset
from sklearn.linear_model import LogisticRegression
lin = LogisticRegression(random_state=0, solver='lbfgs',multi_class='multinomial')
lin.fit(X_train,y_train)

# Testing the dataset on trained model
y_pred = lin.predict(X_test)
score = lin.score(X_test,y_test)*100
print("R square value:" , score)

# Testing with a custom input
import numpy as np
runs_scored = int(input("Enter the Team's current Score : "))
wickets_gone = int(input("Enter the number of wicket's lost : "))
overs_bowled = int(input("Enter the number of overs bowled : "))
strikers_run = int(input("Enter the runs scored by the Batsmen in strike: "))
non_strikers_run = int(input("Enter the runs scored by the Batsmen in non-strike: "))
target_score = int(input("Enter the target : "))

new_prediction = lin.predict_proba(sc.transform(np.array([[runs_scored,wickets_gone,overs_bowled,strikers_run,non_strikers_run,target_score]])))
print("Matching Winning Probability:" , new_prediction[0][1]*100)

