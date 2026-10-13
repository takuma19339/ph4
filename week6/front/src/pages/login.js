import Link from "next/link";
import LoginForm from "../components/LoginForm";

export default function Login() {
  return (
    <div className="min-h-screen bg-[#f6f6f6] px-4 pt-5">
      <div className="mx-auto w-full max-w-sm">
        <LoginForm />
        <div className="mt-4 text-center">
          <p className="text-sm text-gray-600">アカウントがない場合はこちら:</p>
          <Link href="/register" className="text-sm font-bold text-[#4f80e8]">
            新規登録
          </Link>
        </div>
      </div>
    </div>
  );
}