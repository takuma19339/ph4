import { useState } from "react";
import Button from "./Button";
import InputField from "./InputField";

export default function RegisterForm() {
  // ↓ ここに state と handleSubmit を書く(あなたの担当部分)
  const [name, setName] = useState("");
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [passwordConfirmation, setPasswordConfirmation] = useState("");

  const handleSubmit = async (e) => {
    e.preventDefault();

    const response = await fetch("http://localhost/api/register", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({ name, email, password, password_confirmation: passwordConfirmation })
    });

    console.log(response.ok);
  };

  return (
    <form onSubmit={handleSubmit}>
      <InputField id="name" label="名前:" type="text" value={name} onChange={(e) => setName(e.target.value)} />
      <InputField id="email" label="メール:" type="email" value={email} onChange={(e) => setEmail(e.target.value)} />
      <InputField id="password" label="パスワード:" type="password" value={password} onChange={(e) => setPassword(e.target.value)} />
      <InputField id="password_confirmation" label="パスワード確認:" type="password" value={passwordConfirmation} onChange={(e) => setPasswordConfirmation(e.target.value)} />
      <div className="mt-4 text-center">
        <Button type="submit">新規登録</Button>
      </div>
    </form>
  );
}