from flask import Flask,render_template,request
import cx_Oracle
app=Flask(__name__)
@app.route('/loginpage',methods=['GET','POST'])
def loginpage():
	return render_template("index.html")
@app.route('/loginsuccess',methods=['GET','POST'])
def loginsuccess():
	return render_template("loginsuccess.html")
@app.route('/logincheck',methods=['GET','POST'])
def logincheck():
	sun=request.form['un']
	spw=request.form['pw']
	conn=cx_Oracle.connect('system','arun2536')
	curs=conn.cursor()
	query="select * from loginweb where username='%s' and password='%s'" %(sun,spw)
	curs.execute(query)
	rows=curs.fetchall()
	count=curs.rowcount
	if count==1:
		return render_template("loginsuccess.html")
	else:
		return render_template("loginfail.html")	
@app.route('/insertbackend',methods=['GET','POST'])
def insertbackend():
	mid=request.form['movid']
	mname=request.form['movname']
	dname=request.form['dirname']
	mdur=request.form['movdur']
	mrat=request.form['movrat']
	conn=cx_Oracle.connect('system','arun2536')
	curs=conn.cursor()
	query="insert into movdb values(%d,'%s','%s','%s',%d)" %(int(mid),mname,dname,mdur,int(mrat))
	curs.execute(query)
	conn.commit()
	curs.close()
	conn.close()
	return render_template("insertsuccess.html")	
@app.route('/insertpage',methods=['GET','POST'])
def insertpage():
	return render_template("insertpage.html")
@app.route('/displayfrombackend',methods=['GET','POST'])
def displayfrombackend():
	conn=cx_Oracle.connect('system','arun2536')
	curs=conn.cursor()
	query="select * from movdb"
	curs.execute(query)
	rows=curs.fetchall()
	return render_template("displaypage.html",hrows=rows)
@app.route('/deletepage',methods=['GET','POST'])
def deletepage():
	return render_template("deletepage.html")
@app.route('/deletefrombackend',methods=['GET','POST'])
def deletefrombackend():
	mid=request.form['movid']
	conn=cx_Oracle.connect('system','arun2536')
	curs=conn.cursor()
	query="delete from movdb where movid=%d" %(int(mid))
	curs.execute(query)
	conn.commit()
	curs.close()
	conn.close()
	return render_template("deletesuccess.html")
@app.route('/updatepage',methods=['GET','POST'])
def updatepage():
	return render_template("updatepage.html")
@app.route('/updatebackend',methods=['GET','POST'])
def updatebackend():
	umid=request.form['movid']
	umname=request.form['movname']
	umdir=request.form['dirname']
	umdur=request.form['movdur']
	umrat=request.form['movrat']
	conn=cx_Oracle.connect('system','arun2536')
	curs=conn.cursor()
	query="update movdb set movname='%s',dirname='%s',movdur='%s',movrat=%d where movid=%d" %(umname,umdir,umdur,int(umrat),int(umid))
	curs.execute(query)
	conn.commit()
	curs.close()
	conn.close()
	return render_template("updatesuccess.html")

@app.route('/updatesuccess',methods=['GET','POST'])
def updatesuccess():
	return render_template("updatesuccess.html")

app.run(debug=True)