<a href="www.21tek.com"><img src="https://rundawa.com/imageedit_20_2702059961.png" alt="Logo" width="80px"></a>

ทีมงานของบริษัททราบดีกว่า settings ในเครื่อง localhost ของ developer อาจมีบางอย่างที่ไม่เหมือนกับบน server ทำให้เกิดปัญหา "ใช้งานได้ในเครื่อง แต่ใช้บนเซิร์ฟเวอร์ไม่ได้" ทำให้การส่งงานอาจล่าช้าไป

# เริ่มต้นใช้งาน
คุณจะต้องทำการติดตั้ง node เเละ composer อยู่เเล้ว
เข้าไปยังโฟลเดอร์ที่เก็บโค๊ดโปรแกรมของคุณผ่าน `Shell`, `Terminal`, `Command Prompt` หรือ `Windows Power Shell` โดย path สุดท้ายจะเป็น `C:xxx/{project-name}/functions`
- install composer ใช้คำสั่ง `composer install` ถ้ามี
- ใช้คำสั่ง `npm install` เพื่อ install packages
- เปิดเซิร์ฟเวอร์จำลอง ใช้คำสั่ง `node app.js` หรือจะใช้ `nodemon app.js` เมื่อ firebase_hostting ใน index.js เป็น false
- เปิดเซร์ฟเวอร์จำลอง ใช้คำสั่ง `firebase serve` เมื่อ firebase_hostting ใน index.js เป็น true
- ปิดเซิร์ฟเวอร์จำลอง โดยกดปุ่ม `Ctrl + C` (หรือ `Cmd + c` หากคุณทำงานบน macOS)

เปิดดูงานผ่าน browser ที่ URL (http://localhost) หรืออาจจะ (http://localhost:5000)

# การเเก้ไขงาน
- หากจะทำการเเก้ไขให้เเก้ไขให้เเก้ไขเฉพาะในไฟล์ C:xxxx/{project-name}/resources เท่านั้น
- หากมีการสร้างไฟล์ scss ใหม่ หรือ js ให้อัฟเดต webpack.mix ด้วย 
