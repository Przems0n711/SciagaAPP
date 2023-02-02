from flask import Flask, request, render_template, redirect, url_for

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.php')

@app.route('/login', methods=['GET', 'POST'])
def login():
    error = None
    if request.method == 'POST':
        if request.form['username'] != 'techniadmin' or request.form['password'] != 'techniadmin':
            error = 'Invalid credentials. Please try again.'
        else:
            return redirect(url_for('sciaga'))
    return render_template('login.php', error=error)

@app.route('/sciaga', methods=['GET', 'POST'])
def sciaga():
    text = None
    if request.method == 'POST':
        text = request.form['sciaga']
    return render_template('sciaga.php', text=text)

if __name__ == '__main__':
    app.run(debug=True)