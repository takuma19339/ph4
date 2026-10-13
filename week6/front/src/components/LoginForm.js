import { useState } from "react";
import Button from "./Button";
import InputField from "./InputField";

export default function LoginForm() {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");

  const handleSubmit = async(e) => {
    e.preventDefault();

    const response = await fetch("http://localhost/api/login", {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify({ email, password })
    });

    console.log(response.ok)
  };

  return (
    <form onSubmit={handleSubmit}>
      <InputField id="email" label="メール:" type="email" value={email} onChange={(e) => setEmail(e.target.value)} />
      <InputField id="password" label="パスワード:" type="password" value={password} onChange={(e) => setPassword(e.target.value)} />
      <div className="mt-4 text-center">
        <Button type="submit">ログイン</Button>
      </div>
    </form>
  );
}