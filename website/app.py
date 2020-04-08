from flask import Flask, render_template,request
import numpy as np
import pickle
print(pickle.__doc__)
app = Flask(__name__)


model=pickle.load(open('model.pkl','rb'))

@app.route('/')
def home():
    return render_template('winning.html')

@app.route('/predict',methods=['POST'])
def predict():
    int_features=[float(x) for x in request.form.values()]
    final=[np.array(int_features)]
    prediction=model.predict_proba(final)
    output = round(prediction[0])
    #output = '{0:.{1}f}'.format(prediction[0][1], 2)
    #output='{{0}{1}*100}'.format(prediction[0][1], 2)
    #output = model.predict_proba(final)
    return render_template('winning.html', pred='probability of winning is{} '.format(output))


if __name__ == '__main__':
    app.run()
